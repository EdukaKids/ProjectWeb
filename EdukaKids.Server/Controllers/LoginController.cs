using EdukaKids.Server.Data.interfaces;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    // [Authorize]
    [ApiController]
    [Route("api/[controller]")]
    [AllowAnonymous]
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

        [HttpGet]
        public IActionResult Get([FromBody] dynamic user)
        {

            
            return Ok(_LoginRepository.Logar(user.nome, user.senha));
        }
    }
}
