using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EdukaKids.Server.ViewModel
{
    public class CadastroUser
    {
        public string NewNome { get; set; }
        public string NewSenha { get; set; }
        public string NewSobrenome { get; set; }
        public string NewEmail { get; set; }
        public int Idade { get; set; }
    }
}