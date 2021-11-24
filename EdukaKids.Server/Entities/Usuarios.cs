using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace EdukaKids.Server.Controllers
{
    [Table("usuarios")]
    public class Usuarios {
        [Key]
        [Column("id")]
        public string Id { get; set; }

        [Column("dateCreated")]
        public DateTime DateLogin { get; set; }

        [Column("nome")]
        public string Nome { get; set; }

        [Column("sobrenome")]
        public string Sobrenome { get; set; }

        [Column("senha")]
        public string Senha { get; set; }

        [Column("idade")]
        public int Idade { get; set; }

        [Column("Token")]
        public string token { get; set; }

        [Column("Expired")]
        public DateTime expired { get; set; }

        [Column("IsOnline")]
        public bool IsOnline { get; set; }

        [Column("Roles")]
        public string Roles { get; set; }

        
    }
}