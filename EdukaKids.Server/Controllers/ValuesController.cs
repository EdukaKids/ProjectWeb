using Microsoft.AspNetCore.Mvc;

namespace EdukaKids.Server.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ValuesController : ControllerBase
    {
        [HttpGet]
        public IActionResult Get()
        {
            return Ok("Hello World!!");
        }
    }
}
