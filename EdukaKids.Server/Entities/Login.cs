using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace EdukaKids.Server.Controllers
{
    [Table("login")]
    public class Login {
        [Column("id")]
        public Guid Id { get; set; }

        [Column("dateLogin")]
        public DateTime DateLogin { get; set; }

        [Column("nome")]
        public string Nome { get; set; }

        [Column("senha")]
        public string Senha { get; set; }
        /*[Column("Token")]
        public string token { get; set; }
        [Column("Expired")]
        public DateTime expired { get; set; }*/
        
    }
}