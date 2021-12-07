using System;
using EdukaKids.Server.Data.DBContext;
using EdukaKids.Server.Data.Interfaces;
using EdukaKids.Server.Entities;
using EdukaKids.Server.Entities.DTO;

namespace EdukaKids.Server.Data.Repositories
{
    public class QuizRepository : IQuizRepository
    {
        private readonly Context _dbContext;
        public QuizRepository(Context dbContext){
            _dbContext = dbContext;
        }
        public void NewQuiz(QuizDTO quiz, string path){
            _dbContext.Quiz.Add(new Quiz{
                Id = Guid.NewGuid(),
                Inclusao = DateTime.Now,
                Pergunta = quiz.Perguntas,
                Resposta1 = quiz.Respostas[0],
                Resposta2 = quiz.Respostas[1],
                Resposta3 = quiz.Respostas[2],
                Resposta4 = quiz.Respostas[3],
                Correta = quiz.Correta,
                PathImg = path
            });

            _dbContext.SaveChanges();
        }
    }
}