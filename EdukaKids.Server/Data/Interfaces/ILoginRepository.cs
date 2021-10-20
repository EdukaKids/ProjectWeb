using System.Threading.Tasks;
using EdukaKids.Server.Controllers;

namespace EdukaKids.Server.Data.interfaces
{

    public interface ILoginRepository {
        //Task<Login> GetUser();
        Login Logar(string nome, string senha);
    }
}