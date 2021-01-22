# Author: WangRongsheng
# Description: Serverjiang for python.
# P.S. You should go to http://sc.ftqq.com/ to get an url.


import requests
import base64
import os
import time


def check_is_web(string):
    check_list = ['www', 'com', 'net']
    for checker in check_list:
        if string.find(checker) != -1:
            return True
    return False


class sendu(object):
    def __init__(self, url=""):
        path = os.path.expanduser("~") + "/.sendu"
        if url == "":
            if os.path.isfile(path):
                with open(path, 'r') as f:
                    self.url = f.read()
            else:
                print(".sendu doesn\'t exist, please initialize with a url.")
        else:
            self.url = url
            if not os.path.isfile(path):
                os.system("touch ~/.sendu")
            with open(path, 'w') as f:
                f.write(self.url)


    def output_to_weixin_markdown(self, markdown_file, title='健康打卡提醒'):
        with open(markdown_file, 'r', encoding='utf-8') as md:
            content = md.read()
        requests.get(self.url, params={'text':title, 'desp':content})

