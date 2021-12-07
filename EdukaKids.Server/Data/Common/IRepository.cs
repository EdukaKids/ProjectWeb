using System;
using System.Collections;
using System.Collections.Generic;
using System.Threading.Tasks;
using EdukaKids.Server.Entities.Common;

namespace EdukaKids.Server.Data.Common
{
    public interface IRepository<T> where T : class
    {
        IEnumerable<T> GetAll ();
        T GetUserById (Guid id);
        void Insert(T dados);
        void Update (T dados);
        void Delete (Guid id);
    }
}