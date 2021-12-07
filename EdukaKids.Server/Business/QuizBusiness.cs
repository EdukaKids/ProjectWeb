using System.IO;
using EdukaKids.Server.Business.Interface;
using EdukaKids.Server.Data.Interfaces;
using EdukaKids.Server.Entities.DTO;
using Microsoft.AspNetCore.Hosting;

namespace EdukaKids.Server.Business
{
    public class QuizBusiness : IQuizBusiness
    {
        private readonly IQuizRepository _quizRepository;
        private IWebHostEnvironment _Environment;

        public QuizBusiness(IQuizRepository quizRepository, IWebHostEnvironment env) {
            _quizRepository = quizRepository;
            _Environment = env;
        }

        public void NewQuiz(QuizDTO quiz){
            var path = _Environment.WebRootPath + "\\images\\FileQuiz\\" + quiz.File.FileName;


            using(var stream = new FileStream(path, FileMode.Create)){
                quiz.File.CopyTo(stream);
            }

            _quizRepository.NewQuiz(quiz, "\\images\\FileQuiz\\" + quiz.File.FileName);

        }
    }
}