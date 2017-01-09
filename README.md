# initubnt
Script to aid in initial setup deployments of Ubiquiti Networks station radios.

PHP w/ SSH2 extension required.  Uses 'fping' tool to check for connectivity to radio.

The script can update firmware, apply FCC UNII activiation code and also upload a base config file.

The script acquires the model of the radio @ 192.168.1.20 and then uploads firmware and config that in finds
in the firmware and config directories (defined in $config) that matches the model.  For example, if firmware
is at /home/sean/initubnt/firmware and configs are at /home/sean/initubnt/configs and the model of the radio
is a Powerbeam 5AC 500, then the script will look for firmware at:
    
    /home/sean/initubnt/firmware/Powerbeam 5AC 500/fwupdate.bin

and config at:

    /home/sean/initubnt/configs/Powerbeam 5AC 500/system.cfg

The script is designed to remain running continuously and prints output of what it is doing
as it finds and progresses along a radio initializing.

See top of initubnt script for various config options.
