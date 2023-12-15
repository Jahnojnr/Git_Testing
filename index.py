import subprocess
import re

def scan_wifi_networks():
    result = subprocess.run(['iwlist', 'wlan0', 'scan'], capture_output=True, text=True)
    return result.stdout
def parse_wifi_networks(output):
    networks = re.findall(r'ESSID:"(.*?)"', output)
    return networks
def display_wifi_networks(networks):
    for network in networks:
        print(network)
def main():
    output = scan_wifi_networks()
    networks = parse_wifi_networks(output)
    display_wifi_networks(networks)

if __name__ == '__main__':
    main()

