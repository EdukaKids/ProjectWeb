using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace EdukaKids.Server.Controllers
{
    [Table("Login")]
    public class Login {
        public Guid id { get; set; }
        public string nome { get; set; }
        public string senha { get; set; }
        
    }
}