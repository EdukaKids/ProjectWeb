using System;
using System.ComponentModel.DataAnnotations.Schema;
using EdukaKids.Server.Controllers;

namespace EdukaKids.Server.Entities.Common
{
    public class EntityGen
    {
        [ForeignKey("UsuarioGen")]
        public Guid Id { get; set; }
        public virtual Usuarios Usuario { get; set; }
        /*[ForeignKey("QuizGen")]
        public Guid QuizId { get; set; }*/
    }
}