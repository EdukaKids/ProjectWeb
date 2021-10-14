using System;
using System.Linq;
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

        /*public async Task<Login> GetUser(){
            return
        }*/

        public Login Logar(string nome, string senha) {
            /*MD5 md5 = MD5.Create();
            byte[] inputBytes = Encoding.ASCII.GetBytes(senha);
            byte[] hash = md5.ComputeHash(inputBytes);

            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < hash.Length; i++)
            {
                sb.Append(hash[i].ToString("X2"));
            }*/

            /*_dbContext.login.Add(new Login(){
                id = Guid.NewGuid(),
                dateLogin = DateTime.Now,
                nome = nome,
                senha = EncodeTo64(senha)
            });
            _dbContext.SaveChanges();*/

            var consulta = _dbContext.Login.SingleOrDefault(l => l.Nome == nome);

            if(DecodeFrom64(consulta.Senha) == senha){
                return consulta;
            }

            return null;

            
        }

        // Criptografa
        static public string EncodeTo64(string toEncode)
        {

        byte[] toEncodeAsBytes = System.Text.ASCIIEncoding.ASCII.GetBytes(toEncode);

        string returnValue = System.Convert.ToBase64String(toEncodeAsBytes);

        return returnValue;

        }

        static public string DecodeFrom64(string dados)
        {
            try
            {
                byte[] dadosAsBytes = System.Convert.FromBase64String(dados);
                string resultado = System.Text.ASCIIEncoding.ASCII.GetString(dadosAsBytes);
                return resultado;
            }
            catch (Exception)
            {
                throw;
            }
        }
    }
}