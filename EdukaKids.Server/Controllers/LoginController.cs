using System.Threading.Tasks;
using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.Services;
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
        private readonly IUsuariosRepository _UsuariosRepository;

        public LoginController(IUsuariosRepository usuariosRepository) {
            _UsuariosRepository = usuariosRepository;
        }

        public ActionResult<dynamic> Cadastrar([FromBody] CadastroUser newUser) {
            _UsuariosRepository.Cadastrar(newUser);
            return Ok("Cadastrado com sucesso!!");
        }

        [HttpPost("BuscaLoginValido")]
        public ActionResult<dynamic> Post([FromBody] User model)
        {
            var user = _UsuariosRepository.Logar(model.nome, model.senha);

            if(user == null) {
                return NotFound("Login ou Senha invalida");
            }

            var token = TokenService.GenerateToken(user);
            user.Senha = "";


            return new {
                user = user,
                token = token
            };
        }
    }
}
