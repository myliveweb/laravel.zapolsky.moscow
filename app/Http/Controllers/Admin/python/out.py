import logging

print('Python OK!')

logging.basicConfig(filename='log\info.log', encoding='utf-8', format='%(asctime)s - %(levelname)s - %(message)s', level=logging.DEBUG)
logging.info('Go Sellers!')
