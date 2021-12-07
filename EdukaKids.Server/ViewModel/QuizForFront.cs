using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EdukaKids.Server.ViewModel
{
    public class QuizForFront {
        public string q { get; set; }
        public List<string> options { get; set; }
        public int answer { get; set; }
        public string img { get; set; }
    }
}