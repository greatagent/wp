@echo off
rem --hide���к����ش��ڣ�--single�ظ�����ʱ����ɴ��ڣ������ٿ�һ�����ڣ�--exit�˳�
rem ����ϣ�����--hide��--single���ã��״������Զ����ش��ڣ��ٴ�������ʾ�ɴ���
rem ���齫python.exe���͵������ݷ�ʽ������--hide --single����
rem ���迪���Զ����У�����ݷ�ʽ�ŵ���ʼ�˵��������ļ���
start "WallProxy" "%~dp0python.exe" --hide --single
start "PAC" "%~dp0python.exe" --hide ! pac proxy.pac
