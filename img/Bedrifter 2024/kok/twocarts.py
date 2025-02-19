#!/usr/bin/env python
# coding: utf-8

# In[ ]:


#import
import numpy as np
import scipy.linalg as la
import matplotlib.pyplot as plt

#inputvalues 
m1 = 10 #[kg]
m2 = 5 #[kg]
k1 = 6 #[N/m]
k2 = 3 #[N/m]
k3 = 2.5 #[N/m]
c1 = 0.2 #[Ns/m]
c2 = 0.2 #[Ns/m]
c3 = 0.2 #[Ns/m]
F1_abs = 23 #[N]
F2_abs = 10 #[N]
F1_phase = 0 #[rad]
F2_phase = 0 #[rad]
omega = 1 #[rad/s]

#excercise 2b) 
def twocarts(m1, m2, k1, k2, k3, c1, c2, c3, F1_abs, F1_phase, F2_abs, F2_phase, omega):
    #Define the matrices for the system
    M = np.array([[m1,0], [0, m2]]) 
    C = np.array([[c1+c2, -c2], [-c2, c2+c3]])
    K = np.array([[k1+k2, -k2], [-k2, k2+k3]])
    
    #Computing the equation of motion in marix form
    G = -(omega**2)*M + (omega*C)*1j + K 
    
    #Computing the forces on the carts 1 and 2 
    F_1 = F1_abs*(np.cos(F1_phase) + 1j * np.sin(F1_phase))
    F_2 = F2_abs*(np.cos(F2_phase) + 1j * np.sin(F2_phase))
    
    #Define the force matrix 
    F = np.array([F_1, F_2])
    
    #Inverse the equation of motion in matrix form 
    G_inv = np.linalg.inv(G)
    
    #Finding x (displacement) by multiplying the inverse of the equation of motion in matrix form on both sides
    #This leads to us having x multiply with the identity matrix on the left side, which equals x
    x = G_inv@F
    
    #Defining the displacement of cart 1 and 2
    x1 = abs(x[0])
    x2 = abs(x[1])
    
    return x1, x2

 

