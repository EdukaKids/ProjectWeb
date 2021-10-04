using EdukaKids.Server.ViewModel;
using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.Data.DBContext;

namespace EdukaKids.Server.Data.Repositories{

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