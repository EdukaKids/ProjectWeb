using Microsoft.EntityFrameworkCore;
using EdukaKids.Server.Controllers;

namespace EdukaKids.Server.Data.DBContext
{
    public class Context : DbContext
    {
        public Context(DbContextOptions<Context> options) : base(options) {}

        // Entities
        public DbSet<Login> Login { get; set; }
    }
}