import os
import zipfile
from os.path import basename

out_path = 'out/bua-yeu-bich-phuong-'

zipf = zipfile.ZipFile('out/zipped_file.zip', 'w', zipfile.ZIP_DEFLATED)
for root, dirs, files in os.walk(out_path):  
    for filename in files:
        zipf.write(os.path.join(root, filename), basename(os.path.join(root, filename)))
        # print(os.path.join(root, filename))
zipf.close()