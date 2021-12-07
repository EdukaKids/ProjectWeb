using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using EdukaKids.Server.Entities.DTO;

namespace EdukaKids.Server.Data.Interfaces
{
    public interface IQuizRepository
    {
        void NewQuiz(QuizDTO quiz, string path);
    }
}