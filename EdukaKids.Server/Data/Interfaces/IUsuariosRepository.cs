using System.Threading.Tasks;
using EdukaKids.Server.Controllers;
using EdukaKids.Server.Entities.DTO;
using EdukaKids.Server.ViewModel;

namespace EdukaKids.Server.Data.interfaces
{

    public interface IUsuariosRepository {
        //Task<Login> GetUser();
        Usuarios Logar(string nome, string senha);
        Task Cadastrar(CadastroDTO newUser);
    }
}