import puppeteer from 'puppeteer';
const start = async (url, selectorTitle, selectorPrice, specs, buttons) => {
    var headless = true
    var timer = 0
    if(buttons != '[]'){
        headless = false
        timer = 60000
    } 

    const browser = await puppeteer.launch({
        headless: headless,
        args: ['--no-sandbox'],
        ignoreDefaultArgs: ['--disable-extensions'],      
    })   

    const page = await browser.newPage()    
    
    try{
        await page.goto(url, {waitUntil: "networkidle2", timeout: 60000})  
        await page.setCacheEnabled(false)  
        
        setTimeout(async function(){ 
            let title_ = page.waitForSelector('::-p-xpath(' +selectorTitle + ')')                                             
            let price_ = page.waitForSelector('::-p-xpath(' +selectorPrice + ')')
            console.log(title_)
            // let rtitle = await page.$x(selectorTitle)           
            // let rprice = await page.$x(selectorPrice)          
            let title = await page.$eval(title_, el => el.textContent)
            let price = await page.$eval(price_, el => el.textContent)
    
              const titleX = title
              const priceX = price 
            //   const specsX = specs_ ?? []  
    
              console.log(titleX.toString()+':',priceX.toString())      
        }, timer)

    }catch(error){
        // console.log(error)
    }finally {
        await browser.close()
    }
    
    

    
   

     
    
    // if(buttons != '[]'){            
    //     setTimeout(async function(){                
    //         await browser.close()
    //     }, timer)
    // }else{
    // }
    // await browser.close()
   
}
start('https://toyota.com.ph/vios',  '//*[@id="specifications"]/section[1]/div/div[2]/div[2]/table/tbody/tr/td[2]/div[2]',  '//*[@id="specifications"]/section[1]/div/div[2]/div[1]/div/h5/span', '[{"id":255,"registered_hh_id":"130","label":"Engine size (cc)","specs_xpath":"\/\/*[@id=\"collapseTwo\"]\/div\/table\/tbody\/tr[2]\/td[2]","created_at":"2023-12-13 10:45:31","updated_at":null},{"id":256,"registered_hh_id":"130","label":"Engine power (kW \/ HP)","specs_xpath":"\/\/*[@id=\"collapseTwo\"]\/div\/table\/tbody\/tr[3]\/td[2]","created_at":"2023-12-13 10:45:31","updated_at":null}]', '[{"buttons_xpath":"\/\/*[@id=\"specifications\"]\/section[1]\/div\/div[2]\/div[1]\/div\/div"},{"buttons_xpath":"\/\/*[@id=\"specifications\"]\/section[1]\/div\/div[2]\/div[1]\/div\/div\/div\/a[3]"}]')