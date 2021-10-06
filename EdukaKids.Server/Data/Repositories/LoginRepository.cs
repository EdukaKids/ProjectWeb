using System;
using System.Security.Cryptography;
using System.Security.Policy;
using System.Text;
using EdukaKids.Server.Controllers;
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
            MD5 md5 = MD5.Create();
            byte[] inputBytes = Encoding.ASCII.GetBytes("teste");
            byte[] hash = md5.ComputeHash(inputBytes);

            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < hash.Length; i++)
            {
                sb.Append(hash[i].ToString("X2"));
            }

            _dbContext.login.Add(new Login(){
                id = Guid.NewGuid(),
                nome = "Mauricio",
                senha = sb.ToString()
            });
            _dbContext.SaveChanges();
        }
    }
}