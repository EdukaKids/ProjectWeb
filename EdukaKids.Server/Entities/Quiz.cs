using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace EdukaKids.Server.Entities
{
    [Table("quiz")]
    public class Quiz
    {
        [Key]
        [Column("Id")]
        public string Id { get; set; }
        [Column("Inclusao")]
        public DateTime Inclusao { get; set; }
        [Column("Pergunta")]
        public string Pergunta { get; set; }
        [Column("Resposta1")]
        public string Resposta1 { get; set; }
        [Column("Resposta2")]
        public string Resposta2 { get; set; }
        [Column("Resposta3")]
        public string Resposta3 { get; set; }
        [Column("Resposta4")]
        public string Resposta4 { get; set; }
        [Column("Correta")]
        public int Correta { get; set; }
        [Column("PathImg")]
        public string PathImg { get; set; }
    }
}