using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.ViewModel;
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

        [HttpPost("BuscaLoginValido")]
        public IActionResult Post([FromBody] User user)
        {
            return Ok(_LoginRepository.Logar(user.nome, user.senha));
        }
    }
}
