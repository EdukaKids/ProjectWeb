using Microsoft.EntityFrameworkCore;
using EdukaKids.Server.Controllers;
using EdukaKids.Server.Entities;

namespace EdukaKids.Server.Data.DBContext
{
    public class Context : DbContext
    {
        public Context(DbContextOptions<Context> options) : base(options) {}

        // Entities
        public DbSet<Usuarios> Usuarios { get; set; }
        public DbSet<Quiz> Quiz { get; set; }
    }
}