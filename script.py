from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium import *
import sys
import re
x = sys.argv[1]
x = x[:-1]
driver = webdriver.Chrome(executable_path=r"C:\seleniumWebdriver\chromedriver.exe")
driver.get("https://wikitravel.org/en/Main_Page")
driver.find_element_by_id("search").send_keys(x)
driver.find_element_by_id("searchsubmitbtn").click()
f= open("data1.txt","w+")
f.write('UNDERSTAND')
f.write('\n')
value=driver.find_element_by_xpath("//*[@id='mw-content-text']/table/tbody/tr/td[1]/div/p[4]").text
f.write(value)
f.close()
#print(type(value))
f= open("data2.txt","w+")
f.write('GET IN')
f.write('\n')
value=driver.find_element_by_xpath("//*[@id='mw-content-text']/table/tbody/tr/td[1]/div/p[20]").text
f.write(value)
f.close()
#print(value)
f= open("data3.txt","w+")
f.write('GET AROUND')
f.write('\n')
value=driver.find_element_by_xpath("//*[@id='mw-content-text']/table/tbody/tr/td[1]/div/p[41]").text
f.write(value)
f.close()
#print(value)
f= open("data4.txt","w+")
f.write('SEE')
f.write('\n')
value=driver.find_element_by_xpath("//*[@id='mw-content-text']/table/tbody/tr/td[1]/div/p[66]").text
res1 = " ".join(re.findall("[a-zA-Z0-9 ]+", value))
f.write(res1)
f.close()
f1= open("images.txt","w+")
images = driver.find_elements_by_tag_name('img')
l = []
for image in images:
    l.append(image.get_attribute('src'))
l1 = []
j = 0
for i in l:
    if i[-3:] == "jpg":
        if j == 0:
            j+=1
            continue

        l1.append(i)
        f1.write(i)
        f1.write(" ")

f1.close()
