import java.util.regex.Pattern;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class SeleniumTest {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new FirefoxDriver();
    baseUrl = "http://localhost";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
    
  }

  @Test
  public void testApplication() throws Exception {
	
	File f = new File("Resultat_Test.txt");
	FileWriter fw = new FileWriter (f);
    driver.get(baseUrl + "/projet/atelier.php");
    driver.findElement(By.cssSelector("button.btn.btn-primary")).click(); 
    fw.write ("Atelier to AddAtelier Ok \r\n");
    driver.findElement(By.id("theme")).clear();
    driver.findElement(By.id("theme")).sendKeys("coucou");
    driver.findElement(By.id("type")).clear();
    driver.findElement(By.id("type")).sendKeys("c");
    driver.findElement(By.id("date")).clear();
    driver.findElement(By.id("date")).sendKeys("c");
    driver.findElement(By.id("remarque")).clear();
    driver.findElement(By.id("remarque")).sendKeys("c");
    driver.findElement(By.id("lieu")).clear();
    driver.findElement(By.id("lieu")).sendKeys("c");
    driver.findElement(By.id("duree")).clear();
    driver.findElement(By.id("duree")).sendKeys("c");
    driver.findElement(By.id("capacite")).clear();
    driver.findElement(By.id("capacite")).sendKeys("cc");
    driver.findElement(By.id("inscription")).clear();
    driver.findElement(By.id("inscription")).sendKeys("c");
    driver.findElement(By.id("description")).clear();
    driver.findElement(By.id("description")).sendKeys("c");
    driver.findElement(By.id("animateur")).clear();
    driver.findElement(By.id("animateur")).sendKeys("c");
    driver.findElement(By.id("partenaires")).clear();
    driver.findElement(By.id("partenaires")).sendKeys("cc");
    driver.findElement(By.id("public")).clear();
    driver.findElement(By.id("public")).sendKeys("c");
    driver.findElement(By.id("content")).clear();
    driver.findElement(By.id("content")).sendKeys("c");
    fw.write ("AddAtelier write content Ok \r\n");
    driver.findElement(By.id("Ajouter")).click();
    fw.write ("AddAtelier Addcontent Ok\r\n");
    driver.findElement(By.linkText("accueil")).click();
    fw.write ("AddAtelier to Atelier Ok\r\n");
    driver.findElement(By.id("Lister")).click();
    fw.write ("Atelier to ListAtelier Ok\r\n");
    driver.findElement(By.cssSelector("#modification > form[name=\"suppression\"] > button[name=\"valeur\"]")).click();
    fw.write ("Modification clic Ok\r\n");
    driver.findElement(By.id("type")).clear();
    driver.findElement(By.id("type")).sendKeys("hey");
    fw.write ("Modification area Ok\r\n");
    driver.findElement(By.cssSelector("button.btn.btn-primary")).click();
    fw.write ("Modification validation Ok\r\n");
    driver.findElement(By.linkText("Accueil")).click();
    fw.write ("Modification to Atelier Ok\r\n");
    driver.findElement(By.id("Lister")).click();
    fw.write ("Atelier to ListAtelier Ok\r\n");
    driver.findElement(By.cssSelector("#modification > form[name=\"suppression\"] > button[name=\"valeur\"]")).click();
    driver.findElement(By.xpath("(//button[@type='submit'])[2]")).click();
    fw.write ("ListAtelier to Atelier Ok\r\n");
    driver.findElement(By.id("Lister")).click();
    fw.write ("Atelier to ListAtelier Ok\r\n");
    driver.findElement(By.name("valeur")).click();
    fw.write ("suppression Ok\r\n");
    driver.findElement(By.linkText("accueil")).click();
    fw.write ("go to atelier Ok\r\n");
    driver.findElement(By.id("Lister")).click();
    fw.write ("verification List Ok\r\n");
    driver.findElement(By.cssSelector("input[type=\"submit\"]")).click();
    fw.close();
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}
