using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;

namespace EdukaKids.Server.Entities.DTO
{
    public class QuizDTO
    {
        public string Perguntas { get; set; }
        public List<string> Respostas { get; set; }
        public int Correta { get; set; }
        public IFormFile File { get; set; }
    }
}