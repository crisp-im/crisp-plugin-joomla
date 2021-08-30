mkdir crisp
cp src/pkg_crisp.xml crisp
mkdir crisp/packages
cp -r src/packages/com_crisp crisp/packages
cp -r src/packages/plg_crisp crisp/packages

cd crisp/packages
zip -r com_crisp com_crisp
zip -r plg_crisp plg_crisp

rm -r -f com_crisp
rm -r -f plg_crisp

cd ..
cd ..

zip -r crisp crisp

zip -d crisp.zip "crisp/__MACOSX*"
zip -d crisp.zip "*/*.DS_Store"

mv crisp.zip dist

rm -r crisp
