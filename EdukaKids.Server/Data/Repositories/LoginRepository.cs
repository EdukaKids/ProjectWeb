using EdukaKids.Server.Data.DBContext;
using EdukaKids.Server.Data.interfaces;

namespace EdukaKids.Server.Data.Repositories
{

    public class LoginRepository : ILoginRepository {

        private readonly Context _dbContext;

        public LoginRepository(Context dbContext) {
            _dbContext = dbContext;
        }

        public void Logar(string nome) {
            System.Console.WriteLine(nome);
        }
    }
}