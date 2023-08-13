import geo

ip = geo.getIP()
print(ip)

country = geo.getcountry(ip, 'plain')
print(country)

country = geo.getcountry(ip, 'json')
print(country)

geoData = geo.getgeoData(ip)
print(geoData)

ptrData = geo.getPTR(ip)
print(ptrData)

geo.showIpDetails('216.239.30.0')

geo.showCountryDetails('216.239.32.0')