using EdukaKids.Server.Data.interfaces;
using Microsoft.AspNetCore.Mvc;

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

        /*[HttpGet]
        public IActionResult Get() {
            return Ok(_LoginRepository.GetUser());
        }*/

        [HttpPost]
        public IActionResult Post([FromForm] string nome, [FromForm] string senha)
        {

            _LoginRepository.Logar(nome, senha);
            return Ok("Dados Salvos");
        }
    }
}
