package com.example.demo.student;

import org.springframework.boot.CommandLineRunner;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import java.time.LocalDate;
import java.util.List;

@Configuration
public class StudentConfig {

    @Bean
    CommandLineRunner commandLineRunner(StudentRepository repository){
        return args -> {
            Student mariam = new Student("mariam","mariam@gmail.com",  LocalDate.of(2000,04,14));
            Student alex = new Student("alex","alex@gmail.com", LocalDate.of(2004,04,14));
           // repository.saveAll(List.of(mariam,alex));
        };

    }
}
