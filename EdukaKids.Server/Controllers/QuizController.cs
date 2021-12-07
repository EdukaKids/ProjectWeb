using System.Collections.Generic;
using EdukaKids.Server.Business.Interface;
using EdukaKids.Server.Data.Common;
using EdukaKids.Server.Entities;
using EdukaKids.Server.Entities.DTO;
using EdukaKids.Server.ViewModel;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class QuizController : ControllerBase
    {
        private readonly IQuizBusiness _quizBusiness;
        private readonly IRepository<Quiz> _repository;

        public QuizController(IQuizBusiness quizBusiness, IRepository<Quiz> repository) {
            _quizBusiness = quizBusiness;
            _repository = repository;
        }

        [HttpGet]
        public IActionResult get() {
            List<object> array = new List<object>();
            var values = _repository.GetAll();
            foreach(var value in values) {
                array.Add(new QuizForFront{
                    q = value.Pergunta,
                    options = new List<string>() {
                        value.Resposta1, 
                        value.Resposta2, 
                        value.Resposta3, 
                        value.Resposta4
                    },
                    answer = value.Correta,
                    img = value.PathImg
                });
            }
            return Ok("foi");
        }

        [HttpPost]
        public IActionResult post([FromForm] QuizDTO quiz) {
            _quizBusiness.NewQuiz(quiz);
            return Ok("foi");
        }
    }
}