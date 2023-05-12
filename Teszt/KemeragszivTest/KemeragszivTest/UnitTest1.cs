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
        public void NavBar_DisplayedCorrectlyTest()
        {
            IWebElement navbar = driver.FindElement(By.ClassName("navbar"));
            Assert.IsTrue(navbar.Displayed);
        }

        [Test]
        public void NavBarLinksTest()
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
    public class LoginTests
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
        public void LoginFalseEmailTest() {
            driver.FindElement(By.LinkText("Login")).Click();
            IWebElement emailInput = driver.FindElement(By.Id("email"));
            emailInput.Clear();
            emailInput.SendKeys("asd");
            driver.FindElement(By.Id("password")).Click();
            IWebElement ErrorMessage = driver.FindElement(By.Id("EmailErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("email must be a valid email", ErrorMessage.Text);
        }
        [Test]
        public void LoginNullEmailTest()
        {
            driver.FindElement(By.LinkText("Login")).Click();
            IWebElement emailInput = driver.FindElement(By.Id("email"));
            emailInput.SendKeys("asd");
            emailInput.SendKeys(Keys.Control + "a");
            emailInput.SendKeys(Keys.Delete);
            driver.FindElement(By.Id("password")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("EmailErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("The field is mandatory", ErrorMessage.Text);
        }
        [Test]
        public void LoginNullPasswordlTest()
        {
            driver.FindElement(By.LinkText("Login")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("asd");
            passordInput.SendKeys(Keys.Control + "a");
            passordInput.SendKeys(Keys.Delete);
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("The field is mandatory", ErrorMessage.Text);
        }
        [Test]
        public void LoginTrueEmailTest()
        {
            driver.FindElement(By.LinkText("Login")).Click();
            IWebElement emailInput = driver.FindElement(By.Id("email"));
            emailInput.Clear();
            emailInput.SendKeys("sagidaniel24@gmail.com");
            emailInput.Click();
            Thread.Sleep(1000);
            IWebElement ErrorMessage = null;
            try
            {
                ErrorMessage = driver.FindElement(By.Id("errorMessageId"));
            }
            catch (NoSuchElementException)
            {

            }
            Assert.IsNull(ErrorMessage);
        }
    }
    public class RegistrationTests
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
        public void RegistrationTrueEmailTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement emailInput = driver.FindElement(By.Id("email"));
            emailInput.Clear();
            emailInput.SendKeys("sagidaniel24@gmail.com");
            emailInput.Click();
            Thread.Sleep(1000);
            IWebElement ErrorMessage = null;
            try
            {
                ErrorMessage = driver.FindElement(By.Id("errorMessageId"));
            }
            catch (NoSuchElementException)
            {

            }
            Assert.IsNull(ErrorMessage);
        }
        public void RegistrationFalseEmailTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement emailInput = driver.FindElement(By.Id("email"));
            emailInput.Clear();
            emailInput.SendKeys("asd");
            driver.FindElement(By.Id("password")).Click();
            IWebElement ErrorMessage = driver.FindElement(By.Id("EmailErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("email must be a valid email", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationNullPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("asd");
            passordInput.SendKeys(Keys.Control + "a");
            passordInput.SendKeys(Keys.Delete);
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("The field is mandatory", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationBetweenZeroEightPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("asdasd");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("Password must contain at least 8 characters, one uppercase, one number and one special case character.", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationNullUpeprcasePasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("asdasdasd");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("Password must contain at least 8 characters, one uppercase, one number and one special case character.", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationNullNumberPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("Asdasdasd");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("Password must contain at least 8 characters, one uppercase, one number and one special case character.", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationNullSpecialCharacterPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("Asdasdasd8");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("Password must contain at least 8 characters, one uppercase, one number and one special case character.", ErrorMessage.Text);
        }
        [Test]
        public void RegistrationTreuPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("Asdasdasd.8");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = null;
            try
            {
                ErrorMessage = driver.FindElement(By.Id("PasswordErrormessage"));
            }
            catch (NoSuchElementException)
            {

            }
            Assert.IsNull(ErrorMessage);
        }
        [Test]
        public void RegistrationTrueAgainPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("Asdasdasd.8");
            driver.FindElement(By.Id("password_confirmation")).SendKeys("Asdasdasd.8");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = null;
            try
            {
                ErrorMessage = driver.FindElement(By.Id("AgainPasswordErrormessage"));
            }
            catch (NoSuchElementException)
            {

            }
            Assert.IsNull(ErrorMessage);
        }
        [Test]
        public void RegistrationFalseAgainPasswordlTest()
        {
            driver.FindElement(By.LinkText("Register")).Click();
            IWebElement passordInput = driver.FindElement(By.Id("password"));
            passordInput.SendKeys("Asdasdasd.8");
            driver.FindElement(By.Id("password_confirmation")).SendKeys("Asdasdasd.7");
            driver.FindElement(By.Id("email")).SendKeys("ASd");
            IWebElement ErrorMessage = driver.FindElement(By.Id("AgainPasswordErrormessage"));
            Assert.IsTrue(ErrorMessage.Displayed);
            Assert.AreEqual("Passwords don't match.", ErrorMessage.Text);
        }
    }
}