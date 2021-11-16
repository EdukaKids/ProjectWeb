using System;
using System.Linq;
using System.Threading.Tasks;
using EdukaKids.Server.Controllers;
using EdukaKids.Server.Data.DBContext;
using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.ViewModel;
using Microsoft.EntityFrameworkCore;

namespace EdukaKids.Server.Data.Repositories
{
    public class UsuariosRepository : IUsuariosRepository {

        private readonly Context _dbContext;

        public UsuariosRepository(Context dbContext) {
            _dbContext = dbContext;
        }

        /*public async Task<Login> GetUser(){
            return
        }*/

        public Usuarios Logar(string nome, string senha) {

            var consulta = _dbContext.Usuarios.SingleOrDefault(l => l.Nome == nome);

            if(DecodeFrom64(consulta.Senha) == senha){
                if(!consulta.IsOnline){
                    consulta.IsOnline = true;
                    _dbContext.Usuarios.Update(consulta).State = EntityState.Modified;
                    _dbContext.SaveChanges();
                }
                return consulta;
            }

            return null;

            
        }

        public async Task Cadastrar(CadastroUser newUser){
            object senhaExistente = await _dbContext.Usuarios.FirstOrDefaultAsync(x => 
                                            x.Senha == newUser.NewSenha);
        }


        #region Métodos locais da classe
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
        #endregion
    }
}