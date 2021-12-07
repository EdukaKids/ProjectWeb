using EdukaKids.Server.Business.Interface;
using EdukaKids.Server.Entities.DTO;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class QuizController : ControllerBase
    {
        private readonly IQuizBusiness _quizBusiness;
        public QuizController(IQuizBusiness quizBusiness) {
            _quizBusiness = quizBusiness;
        }

        [HttpGet]
        public IActionResult get() {
            return Ok("foi");
        }

        [HttpPost]
        public IActionResult post([FromForm] QuizDTO quiz) {
            _quizBusiness.NewQuiz(quiz);
            return Ok("foi");
        }
    }
}