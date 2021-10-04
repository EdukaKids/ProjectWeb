using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace EdukaKids.Server.Controllers
{
    [Table("Login")]
    public class Login {
        [Column("id")]
        public Guid id { get; set; }
        [Column("dateLogin")]
        public DateTime dateLogin { get; set; }
        [Column("nome")]
        public string nome { get; set; }
        [Column("senha")]
        public string senha { get; set; }
        
    }
}