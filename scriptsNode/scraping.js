const { isEmpty } = require('lodash');
const puppeteer = require('puppeteer');

function screenShot_byURL(url) {
    try {
        (async () => {
            const browser = await puppeteer.launch({
                headless: false});
            const page = await browser.newPage();
            await page.goto('https://www.similarweb.com/website/'+url+'/#overview', { waitUntil: "domcontentloaded" });
            //using DOM select className for get part html 
            const data = await page.waitForSelector('.engagement-list__item-value');
            const total_visits = await (await data.getProperty("innerText")).jsonValue();
            
            //identify element with class name
            const elements = await page.evaluate(() => document.querySelectorAll('.wa-geography__country-info'));
            //const selector = ".wa-geography__country-info";
            //const elements = await page.$(".wa-geography__country-info");
            // Extract and store the text content of each matching element
            //const result = await Promise.all(elements.map((element) => element.evaluate((el) => el.textContent)));
            //const result = await (await elements.map((element) => element.evaluate((el) => el.textContent))).jsonValue();
            //const top_contreies = await (await f.querySelector('.wa-geography__legend-item')).jsonValue();
            if(isEmpty(total_visits))
                total_visits = '-';
            browser.close();
            //const dataJ = { 'total_visits' : total_visits, 'top_contreies' : f }
            //returen total vistors
            return console.log(total_visits, elements);
        })();
    } catch (error) {
        return console.error(error);
    }
}
const url = process.argv[2];
screenShot_byURL(url);