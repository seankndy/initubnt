# initubnt
Script to aid in initial setup deployments of Ubiquiti Networks station radios.

PHP w/ SSH2 extension required.  Uses 'fping' tool to check for connectivity to radio.

The script can update firmware, apply FCC UNII activiation code and also upload a base config file.

The script acquires the model of the radio @ 192.168.1.20 and then uploads firmware and config that in finds
in the firmware and config directories (defined in $config) that matches the model.  For example, if firmware
is @ /home/sean/initubnt/firmware and configs are at /home/sean/initubnt/configs and the model of the radio
is a Powerbeam 5AC 500, then the script will look for firmware @:
    
    /home/sean/initubnt/firmware/Powerbeam 5AC 500/fwupdate.bin

and config @:

    /home/sean/initubnt/configs/Powerbeam 5AC 500/system.cfg



See top of initubnt script for various config options.
