const puppeteer = require('puppeteer');

function screenShot_byURL(url, name_img, size) {
  try {
    (async () => {
        const browser = await puppeteer.launch({headless: "new"});
        const page = await browser.newPage();
        await page.setViewport({width: size, height: size-100});
        await page.goto(url, { waitUntil: 'domcontentloaded' });
        await page.screenshot({ path: './Uploads/screens/'+name_img });

        await browser.close();
    })();
    return console.log(true);
  } catch (e) {
    return console.error(e);
  }
}
//'/Uploads/screens/'
const url = process.argv[2];
const name_img = process.argv[3];
const size = parseInt(process.argv[4]);
screenShot_byURL(url, name_img, size);
