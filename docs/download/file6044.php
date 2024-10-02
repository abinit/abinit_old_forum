make[4]: warning: -jN forced in submake: disabling jobserver mode.
libtool:   error: ignoring unknown tag F77
libtool:   error: ignoring unknown tag F77
libtool:   error: ignoring unknown tag F77
libtool:   error: ignoring unknown tag F77
libtool:   error: ignoring unknown tag F77
libtool:   error: ignoring unknown tag F77
make[4]: warning: -jN forced in submake: disabling jobserver mode.
drotmg.f:138.15:

      GO TO IGO(120,150,180,210)                                        
               1
Warning: Deleted feature: Assigned GOTO statement at (1)
drotmg.f:144.72:

      ASSIGN 120 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
drotmg.f:156.72:

      ASSIGN 150 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
drotmg.f:169.72:

      ASSIGN 180 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
drotmg.f:180.72:

      ASSIGN 210 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
srotmg.f:140.15:

      GO TO IGO(120,150,180,210)                                        
               1
Warning: Deleted feature: Assigned GOTO statement at (1)
srotmg.f:146.72:

      ASSIGN 120 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
srotmg.f:158.72:

      ASSIGN 150 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
srotmg.f:171.72:

      ASSIGN 180 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
srotmg.f:182.72:

      ASSIGN 210 TO IGO                                                 
                                                                        1
Warning: Deleted feature: ASSIGN statement at (1)
make[4]: warning: -jN forced in submake: disabling jobserver mode.
m_spin_model_primitive.F90: In function ‘__final_m_spin_model_primitive_Spin_model_primitive_t’:
m_spin_model_primitive.F90:905:0: internal compiler error: in gfc_conv_descriptor_data_get, at fortran/trans-array.c:145
 end module m_spin_model_primitive
 ^
0x5e3f78 gfc_conv_descriptor_data_get(tree_node*)
	../.././gcc/fortran/trans-array.c:145
0x5e96bf gfc_array_deallocate(tree_node*, tree_node*, tree_node*, tree_node*, tree_node*, gfc_expr*)
	../.././gcc/fortran/trans-array.c:5346
0x63698a gfc_trans_deallocate(gfc_code*)
	../.././gcc/fortran/trans-stmt.c:5481
0x5e0e87 trans_code
	../.././gcc/fortran/trans.c:1798
0x634661 gfc_trans_simple_do
	../.././gcc/fortran/trans-stmt.c:1443
0x634661 gfc_trans_do(gfc_code*, tree_node*)
	../.././gcc/fortran/trans-stmt.c:1606
0x5e0f4a trans_code
	../.././gcc/fortran/trans.c:1748
0x60047b gfc_generate_function_code(gfc_namespace*)
	../.././gcc/fortran/trans-decl.c:5653
0x5e2311 gfc_generate_module_code(gfc_namespace*)
	../.././gcc/fortran/trans.c:1995
0x5a0045 translate_all_program_units
	../.././gcc/fortran/parse.c:4940
0x5a0045 gfc_parse_file()
	../.././gcc/fortran/parse.c:5150
0x5dd175 gfc_be_parse_file
	../.././gcc/fortran/f95-lang.c:212
Please submit a full bug report,
with preprocessed source if appropriate.
Please include the complete backtrace with any bug report.
See <http://gcc.gnu.org/bugs.html> for instructions.
make[3]: *** [m_spin_model_primitive.o] Error 1
make[3]: *** Waiting for unfinished jobs....
make[2]: *** [all-recursive] Error 1
make[1]: *** [all-recursive] Error 1
make: *** [all] Error 2
