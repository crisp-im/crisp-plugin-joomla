mkdir crisp
cp src/pkg_crisp.xml crisp
mkdir crisp/packages
cp -r src/packages/com_crisp crisp/packages
cp -r src/packages/plg_crisp crisp/packages

zip -r crisp/packages/com_crisp crisp/packages/com_crisp
zip -r crisp/packages/plg_crisp crisp/packages/
rm -r -f crisp/packages/com_crisp 
rm -r -f crisp/packages/plg_crisp 

zip -r crisp crisp

zip -d crisp.zip "crisp/__MACOSX*"
zip -d crisp.zip "*/*.DS_Store"

mv crisp.zip dist

rm -r crisp
