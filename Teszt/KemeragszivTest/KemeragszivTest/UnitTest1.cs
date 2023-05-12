namespace KemeragszivTest
{
    using NUnit.Framework;
    using OpenQA.Selenium;
    using OpenQA.Selenium.Chrome;

    [TestFixture]
    public class NavBarTests
    {
        private IWebDriver driver;

        [SetUp]
        public void SetUp()
        {
            driver = new ChromeDriver();
            driver.Navigate().GoToUrl("http://localhost:5173"); 
        }

        [TearDown]
        public void TearDown()
        {
            driver.Quit();
            driver.Dispose();
        }

        [Test]
        public void NavBar_DisplayedCorrectly()
        {
            IWebElement navbar = driver.FindElement(By.ClassName("navbar"));
            Assert.IsTrue(navbar.Displayed);
        }

        [Test]
        public void NavBar_ContainsLinks()
        {
            IWebElement flightsLink = driver.FindElement(By.LinkText("Flights"));
            IWebElement luggageLocationLink = driver.FindElement(By.LinkText("Luggage location"));
            IWebElement groundHandlerLink = driver.FindElement(By.LinkText("Ground Handler"));
            IWebElement flightOperatorLink = driver.FindElement(By.LinkText("Flight Operator"));
            IWebElement adminLink = driver.FindElement(By.LinkText("Administration"));
            IWebElement loginLink = driver.FindElement(By.LinkText("Login"));
            IWebElement registerLink = driver.FindElement(By.LinkText("Register"));

            Assert.IsTrue(flightsLink.Displayed);
            Assert.IsTrue(luggageLocationLink.Displayed);
            Assert.IsTrue(groundHandlerLink.Displayed);
            Assert.IsTrue(flightOperatorLink.Displayed);
            Assert.IsTrue(adminLink.Displayed);
            Assert.IsTrue(loginLink.Displayed);
            Assert.IsTrue(registerLink.Displayed);
        }
    }
}