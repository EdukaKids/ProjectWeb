using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using EdukaKids.Server.Entities.DTO;

namespace EdukaKids.Server.Business.Interface
{
    public interface IQuizBusiness
    {
        void NewQuiz(QuizDTO quiz);
    }
}