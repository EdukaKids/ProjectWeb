using System;
using System.Linq;
using EdukaKids.Server.Controllers;
using EdukaKids.Server.Data.DBContext;
using EdukaKids.Server.Data.interfaces;
using EdukaKids.Server.Entities.DTO;
using EdukaKids.Server.Services;
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

        public Usuarios Logar(string email, string senha) {

            var consulta = _dbContext.Usuarios.SingleOrDefault(l => l.email == email && l.Senha == EncodeTo64(senha));

            var token = TokenService.GenerateToken(consulta);

            DateTime dateTime = DateTime.Now.AddHours(2);

            if(DecodeFrom64(consulta.Senha) == senha){
                if(!consulta.IsOnline){
                    consulta.IsOnline = true;
                    consulta.token = token;
                    consulta.expired = dateTime;
                    _dbContext.Usuarios.Update(consulta).State = EntityState.Modified;
                    _dbContext.SaveChanges();
                }
                return consulta;
            }

            return null;

            
        }

        public void Cadastrar(CadastroDTO newUser)
        {
            try 
            {
                string senhaCodification = EncodeTo64(newUser.senha);
                var senhaExistente = _dbContext.Usuarios.FirstOrDefault(x => 
                                                x.Senha == senhaCodification);

                if(senhaExistente == null) {
                    _dbContext.Usuarios.Add(new Usuarios{
                        Id = Guid.NewGuid().ToString(),
                        DateLogin = DateTime.Now,
                        Nome = newUser.name,
                        Sobrenome = newUser.sobrenome,
                        Senha = EncodeTo64(newUser.senha),
                        Idade = newUser.idade,
                        expired = DateTime.Today,
                        Roles = "Common",
                        email = newUser.email
                    });
                    _dbContext.SaveChanges();
                }

            }
            catch(Exception e) 
            {
                System.Console.WriteLine(e);
            }
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