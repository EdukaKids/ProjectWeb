using Microsoft.AspNetCore.Mvc;
using EdukaKids.Server.Data.interfaces;

namespace EdukaKids.Server.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class LoginController : ControllerBase
    {
        private readonly ILoginRepository _LoginRepository;

        public LoginController(ILoginRepository loginRepository) {
            _LoginRepository = loginRepository;
        }

        [HttpGet]
        public IActionResult Get()
        {

            _LoginRepository.Logar("Hello World!!");
            return Ok("Hello World!!");
        }
    }
}
