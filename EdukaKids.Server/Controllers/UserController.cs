using System;
using System.Threading.Tasks;
using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.Entities.DTO;
using EdukaKids.Server.Services;
using EdukaKids.Server.ViewModel;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    // [Authorize]
    [ApiController]
    [Route("api/[controller]")]
    //[AllowAnonymous]
    public class UserController : ControllerBase
    {
        private readonly IUsuariosRepository _UsuariosRepository;

        public UserController(IUsuariosRepository usuariosRepository) {
            _UsuariosRepository = usuariosRepository;
        }

        [HttpPost("Cadastrar")]
        public ActionResult<dynamic> Cadastrar([FromBody] CadastroDTO newUser) {
            _UsuariosRepository.Cadastrar(newUser);
            return Ok("Cadastrado com sucesso!!");
        }

        [HttpPost("BuscaLoginValido")]
        public IActionResult Login([FromBody] User model)
        {
            var user = _UsuariosRepository.Logar(model.nome, model.senha);

            if(user == null) {
                return NotFound("Login ou Senha invalida");
            }
            
            user.Senha = "";


            return Ok(user.Id.ToString());
        }

        [HttpGet("buscar")]
        [Authorize("Manager")]
        public IActionResult Buscar() {
            return Ok("Autorizado");
        }
    }
}
