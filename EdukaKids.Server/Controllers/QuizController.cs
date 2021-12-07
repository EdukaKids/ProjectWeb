using EdukaKids.Server.Entities.DTO;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class QuizController : ControllerBase
    {
        
        public QuizController() {}

        [HttpPost]
        public IActionResult post([FromForm] Quiz quiz) {
            return Ok("foi");
        }
    }
}