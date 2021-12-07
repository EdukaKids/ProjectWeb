using EdukaKids.Server.Data.DBContext;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using Microsoft.OpenApi.Models;
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Configuration;
using EdukaKids.Server.Data.Repositories;
using System.IO;
using EdukaKids.Server.Data.interfaces;
using Microsoft.AspNetCore.Authentication.JwtBearer;
using System.Text;
using Microsoft.IdentityModel.Tokens;
using Microsoft.AspNetCore.Authorization;
using EdukaKids.Server.Data.Common;
using EdukaKids.Server.Controllers;
using EdukaKids.Server.Business.Interface;
using EdukaKids.Server.Business;
using EdukaKids.Server.Data.Interfaces;

namespace EdukaKids.Server
{
    public class Startup
    {
        private IConfiguration Configuration;
        public Startup()
        {
            Configuration = new ConfigurationBuilder()
                .SetBasePath(Directory.GetCurrentDirectory())
                .AddJsonFile("appsettings.json", optional: true, reloadOnChange: true)
                .Build();
        }

        [Obsolete]
        public void ConfigureServices(IServiceCollection services)
        {
            services.AddControllers();
            services.AddCors();
            services.AddControllers();

            var policy = new AuthorizationPolicyBuilder()
                            .RequireAuthenticatedUser()
                            .Build();

            var connectionString = Configuration.GetConnectionString("EdukaKids");
            services.AddDbContext<Context>(opt =>
                     opt.UseSqlServer(connectionString));
            
            services.AddSwaggerGen(c =>
            {
                c.SwaggerDoc("v1", new OpenApiInfo { Title = "TodoApi", Version = "v1" });
            });

            // Camada de Negocio sendo injetado
            services.AddScoped<IQuizBusiness, QuizBusiness>();

            services.AddScoped<IUsuariosRepository, UsuariosRepository>();
            services.AddScoped<IQuizRepository, QuizRepository>();

            services.AddTransient<IRepository<Usuarios>, Repository<Usuarios>>();

            // Adds a default in-memory implementation of IDistributedCache.
            services.AddDistributedMemoryCache();

            services.AddSession(options =>
            {
                options.IdleTimeout = TimeSpan.FromMinutes(30);
                options.Cookie.HttpOnly = true;
            });

            services.AddPhp(options =>
            {

            });

            services.AddAuthorization(options =>
            {
                options.AddPolicy("Manager", policy => policy.RequireClaim("Store", "Manager"));
                options.AddPolicy("Admin", policy => policy.RequireClaim("Store", "Admin"));
            });
            
            var key = Encoding.ASCII.GetBytes(Settings.secret);
            services.AddAuthentication(x =>
            {
                x.DefaultAuthenticateScheme = JwtBearerDefaults.AuthenticationScheme;
                x.DefaultChallengeScheme = JwtBearerDefaults.AuthenticationScheme;
            })
            .AddJwtBearer(x =>
            {
                x.RequireHttpsMetadata = false;
                x.SaveToken = true;
                x.TokenValidationParameters = new TokenValidationParameters
                {
                    ValidateIssuerSigningKey = true,
                    IssuerSigningKey = new SymmetricSecurityKey(key),
                    ValidateIssuer = false,
                    ValidateAudience = false
                };
            });
        }

        public void Configure(IApplicationBuilder app, 
                              IWebHostEnvironment env, 
                              IServiceProvider serviceProvider
                            )
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
                app.UseSwagger();
                app.UseSwaggerUI(c => c.SwaggerEndpoint("/swagger/v1/swagger.json", "TodoApi v1"));
            }

            app.UseSession();

            app.UsePhp();
            app.UseDefaultFiles();
            app.UseStaticFiles();

            app.UseHttpsRedirection();
            app.UseRouting();

            app.UseCors(x => x
                .AllowAnyOrigin()
                .AllowAnyMethod()
                .AllowAnyHeader());

            app.UseAuthentication();
            app.UseAuthorization();

            app.UseEndpoints(endpoints =>
            {
                endpoints.MapControllers();
            });
        }
    }
}
