using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using EdukaKids.Server.Data.DBContext;
using EdukaKids.Server.Entities.Common;
using Microsoft.EntityFrameworkCore;

namespace EdukaKids.Server.Data.Common
{
    public class Repository<T> : IRepository<T> where T : class
    {
        protected readonly Context _dbContext;

        public Repository(Context dbContext) {
            _dbContext = dbContext;
        }

        public IEnumerable<T> GetAll () { 
            return _dbContext.Set<T>().ToList();
        }

        public T GetUserById (Guid id) {
            return _dbContext.Set<T>().Find(id.ToString());
        }

        public void Insert(T dados) {}
        public void Update (T dados) {}
        public void Delete (Guid id) {}
    }
}